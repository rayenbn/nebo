
window.addEventListener("load", function(){

    var ageRestriction = Cookies.get("age_restrcition");
    console.log(ageRestriction);
    if (ageRestriction == null){
        setTimeout(
            function open(event){
                $.magnificPopup.open({
                    type: 'inline',
                    preloader: false,
                    focus: '#username',
                    modal: true,
                    items: {
                        src: '#age-popup' 
                    },
                });
                document.querySelector(".age-popup").style.display = "block";
            },
            1000
        )
    }
});
$(document).on('click', '.popup-age-accepted', function (e) {
    e.preventDefault();
    Cookies.set("age_restrcition", 1, {expires: 7});
    $.magnificPopup.close();
});

$(document).on('click', '.popup-btn-underage', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
});