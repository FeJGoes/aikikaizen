//----------------------------------------------------------------------------//
// -------------------------- VARIABLES ------------------------------------- //
//----------------------------------------------------------------------------//
var navbarMenu = document.getElementById('header-navbar-main')
let pre
//----------------------------------------------------------------------------//
// ---------------------------- EVENTS -------------------------------------- //
//----------------------------------------------------------------------------//
document.onscroll = (e) =>
{
    console.log(pre, document.scrollingElement.scrollTop)
    if (window.scrollY < pre)
    {
        navbarMenu.style.position = 'fixed'
        navbarMenu.style.top = 0
        navbarMenu.style.animationDuration = '1.5s'
    }
    else
    {
        navbarMenu.style.position = ''
    }

    pre = window.scrollY
}
//----------------------------------------------------------------------------//
// -------------------------- FUNCTIONS ------------------------------------- //
//----------------------------------------------------------------------------//