window.addEventListener( 'DOMContentLoaded', ()=>{

    var $body = document.querySelector('body');
    if ($body.classList.contains('page-about-us')) {
        
        $headerLinkAction = document.querySelector('#site-header .header-link-action');
        $headerLinkAction.innerText = "Give us a call";

    }

} );
