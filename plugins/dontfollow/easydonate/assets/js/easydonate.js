$.request('onGetComponents', {
    success: function (components) {
        if (!components) {
            return false;
        }

        for (var component in components) {
            $.request(component + '::onRender');
        }
    }
});
