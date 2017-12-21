<style scoped="">
    .slug-widget{
        display: flex;
        justify-content:flex-start;
        align-items:center;
    }
    .wrapper{
        margin-left: 10px;
    }

    .slug{
        background-color: #fdfd96;
        padding:3px 5px;
    }

    .input {
        width: auto;
      }

    .url-wrapper {
        display: flex;
        align-items:center;
        height:20px;
      }

</style>

<template>
    <div class="slug-widget">
       <div class="icon-wrapper wrapper">
           <i class="fa fa-link"></i>
       </div>
        <div class="url-wrapper wrapper">
            <span class="root-url">{{ url }}</span
            ><span class="subdirectory-url">{{ subdirectory}}</span
            ><span class="slug" v-show="slug && !isEditing">{{ slug}}</span
            ><span class="slug-edit" v-show="isEditing"><input type="text" name="slug" class="input" v-model="customSlug"  /></span>
        </div>

        <div class="button-wrapper wrapper">
            <button class="save-slug-button button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
            <button class="save-slug-button button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
            <button class="save-slug-button button is-small" v-show="isEditing" @click.prevent="resetEditing">Reset</button>
        </div>
    </div>
</template>


<script>
    export default {
        /* Properties*/
        props: {
            url: {
                type: String,
                required: true
            },
            subdirectory: {
                type: String,
                required: true
            },
            title: {
                type: String,
                required: true
            }

        },
        data: function() {
            return {
                slug: this.setSlug(this.title), //  slug: this.convertTitle(),
                isEditing: false,
                customSlug: '',
                wasEdited: false,
                api_token: this.$root.api_token
            }
        },
        methods: {
//            convertTitle: function () {
//                return Slug(this.title)
//            },

          editSlug: function () {
             this .customSlug = this.slug;
             this.$emit('edit', this.slug);
              this.isEditing = true;
          },
          saveSlug: function () {
                // run ajax to see if new slug is unique

              if (this.customSlug !== this.slug) this.wasEdited = true;

              this.setSlug(this.customSlug) ;  //this.slug = Slug(this.customSlug) ;
              this.$emit('save', this.slug);
              this.isEditing = false;
          },
            resetEditing: function () {
                this.setSlug(this.title);  //this.setSlug = this.convertTitle();
                this.$emit('reset', this.slug);
                this.resetEditing = false;
                this.isEditing = false;
            },

            setSlug:  function(newVal, count = 0){
                 //slugify the newval
                let slug = Slug(newVal + (count > 0 ? `-${count}` : ''));
                let vm = this;

                //Test if its exist
                if(this.api_token && slug){
                    //test to see if unique
                    axios.get('/api/posts/unique', {
                        params: {
                            api_token: vm.api_token  ,
                            slug: slug
                        }
                    }).then(function (response){
                        //if unique , then set the slug and emit event
                        if (response.data){
                            vm.slug = slug;
                             vm.$emit('slug-changed', slug)  //this.$emit('slug-changed', this.slug)
                        }else{
                            //if not , customize  the slug to make it unique and test again
                            vm.setSlug(newVal, count+1)
                        }

                    }).catch (function(error){
                        console.log(error);
                    });
                }

            }
        },

        /*Watch the title  // this.slug = this.convertTitle();*/
        watch: {

            title: _.debounce(function () {
                if (this.wasEdited == false) this.setSlug(this.title);   //if (this.wasEdited == false) this.slug = this.convertTitle()

                // run ajax to see if slug is unique
                //If not unique , customize the slug to make it unique

            }, 500)
//            slug:  function(val){
//                this.$emit('slug-changed', this.slug)
//            }
        }
    }
</script>
