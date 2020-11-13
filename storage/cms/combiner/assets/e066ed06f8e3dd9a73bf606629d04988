new WOW().init();

$('#product').on('show.bs.modal', function (event) {
    $.request('onRenderProduct', {
        data: {
            product_id: $(event.relatedTarget).data('product-id')
        },
        update: {
            product: '.product-modal'
        }
    });
});

$('#server').on('show.bs.modal', function (event) {
    $.request('onRenderServer', {
        data: {
            server_id: $(event.relatedTarget).data('server-id')
        },
        update: {
            server: '.server-modal'
        }
    });
});