


// var orderPageButton = document.getElementById('order-navigator');
var viewOrderPageButton = document.getElementById('view-navigator');
var updateOrderPageButton = document.getElementById('update-navigator');
var deleteOrderPageButton = document.getElementById('delete-navigator');

// var orderPage = document.getElementsByClassName('right-body-order-page')[0];
var viewOrderPage = document.getElementsByClassName('right-body-viewOrder-page')[0];
var updateOrderPage = document.getElementsByClassName('right-body-updateOrder-page')[0];
var deleteOrderPage = document.getElementsByClassName('right-body-deleteOrder-page')[0];

viewOrderPageButton.addEventListener('mousedown', () => {
    updateOrderPage.classList.add('hidden');
    deleteOrderPage.classList.add('hidden');
    if(viewOrderPage.classList.contains('hidden')){
        viewOrderPage.classList.remove('hidden');
    }else{
        viewOrderPage.classList.add('hidden');
    }

});

updateOrderPageButton.addEventListener('mousedown', () => {
    deleteOrderPage.classList.add('hidden');
    viewOrderPage.classList.add('hidden');
    if(updateOrderPage.classList.contains('hidden')){
        updateOrderPage.classList.remove('hidden');
    }else{
        updateOrderPage.classList.add('hidden');
    }
});

deleteOrderPageButton.addEventListener('mousedown', () => {
    updateOrderPage.classList.add('hidden');
    viewOrderPage.classList.add('hidden');
    if(deleteOrderPage.classList.contains('hidden')){
        deleteOrderPage.classList.remove('hidden');
    }else{
        deleteOrderPage.classList.add('hidden');
    }
});


