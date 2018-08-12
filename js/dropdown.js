/*Dropdown Menu*/
$('.dropdown').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function () {
    $(this).parents('.dropdown').find('span').text($(this).text());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/

$("#priceSort2").on("click", function (event) {
    var x = $("#priceSort").val();
    console.log(x);
});

$("#brands_container2").on("click", function (event) {
    var x = $("#brands_container2").attr('data-value');
    var y = $(".data-class").data('class');
    console.log("x is: "+x);
    console.log("x is: "+y);
});

$("#condition_container2").on("click", function (event) {
    var x = $("#condition_container").val();
    console.log(x);
});