// Menu Accordions

const accordions = document.getElementsByClassName('has-submenu')
const  adminSlideoutButton = document.getElementById('admin-slideout-button')

function setSubmenuStyles (submenu, maxHeight , margins) {
    submenu.style.maxHeight = maxHeight
    submenu.style.marginTop = margins
    submenu.style.marginBottom = margins
}

adminSlideoutButton.onclick = function () {
    this.classList.toggle('is-active');
    document.getElementById('admin-side-menu').classList.toggle('is-active')
}

for (var i = 0; i < accordions.length; i++) {
    if (accordions[i].classList.contains('is-active')){  //when we load the page

        const submenu = accordions[i].nextElementSibling;
        setSubmenuStyles(submenu, submenu.scrollHeight)
        // submenu.style.maxHeight = submenu.scrollHeight + "px";
        // submenu.style.marginTop = "0.75em"
        // submenu.style.marginBottom = "0.75em"
    }

    accordions[i].onclick = function () {
        this.classList.toggle('is-active');

        const submenu = this.nextElementSibling;
        if (submenu.style.maxHeight){
            //Menu is open , we need to close it now
            submenu.style.maxHeight = null
            submenu.style.marginTop = null
            submenu.style.marginBottom = null
        }else{
            //menu is close , so we need to open it

            submenu.style.maxHeight = submenu.scrollHeight + "px"
            submenu.style.marginTop = "0.75em"
            submenu.style.marginBottom = "0.75em"
        }
    }
}