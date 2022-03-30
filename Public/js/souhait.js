$(document).ready(function(){

    $(".croix").click(function() {
        window.alert("Supprimé de la wishlist")

        }
    );

    const list = document.querySelector('.list')
    const lis = list.children;

    for (var i = 0; i < lis.length; i++) {
        lis[i].id = i;
        lis[i].addEventListener('mouseenter', handleEnter);
        lis[i].addEventListener('mouseleave', handleLeave);
    lis[i].addEventListener('click', handleClick);
    }

    function handleEnter(e) {
        e.target.classList.add('hover');
        for (var i = 0; i <= e.target.id; i++) {
            lis[i].classList.add('hover');
        }
    }

    function handleLeave(e) {
    [...lis].forEach(item => {
            item.classList.remove('hover');
        });
    }

    function handleClick(e){
    [...lis].forEach((item,i) => {
            item.classList.remove('selected');
        if(i <= e.target.id){
        item.classList.add('selected');
        }
        });
    }
});