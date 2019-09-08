$('.order a').click(function (e) {
    e.preventDefault();
    let id = $(this).data('id')
    openModal(id);

});
$(".list-button").click(function(){
    $(".list-news").show();
});
function openModal(id) {
    $("#type-product select > option").prop("selected",false);
    $("#type-product select > option:nth-child("+(id)+")").prop("selected","selected");
    countPrice();
    $('#model-contact').show();
    $('.cover-fix').show();
}
$("#type-product select").change(function(){
    countPrice();
})
$("#amount").change(function(){
    countPrice();
})
countPrice
function countPrice(){
    console.log($("#type-product select > option:selected").index()+1);
id = $("#type-product select > option:selected").index()+1;
switch (id) {
    case 1:
        price = 100000;
        break;
    case 2:
        price = 150000;
        break;
    case 3:
        price =
            200000;
        break;
}


    let amount = $("#amount").val();
    total = amount * price

    //$("#amount").text($("#type-product select > option:selected").index()+1)

    $("#price").text(formatCurrency(price));
    $("#total").text(formatCurrency(total))
}
function formatCurrency(curr){
    curr  = formatMoney(curr);
    return curr + " đ"
}
function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = ",") {
    try {
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

        const negativeSign = amount < 0 ? "-" : "";

        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;

        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    } catch (e) {
        console.log(e)
    }
};
$(".btn-close").click(function(){
    $('.cover-fix').trigger('click');
});
$('.cover-fix').click(function () {
    $('#model-contact').hide();
    $(this).hide();
});



