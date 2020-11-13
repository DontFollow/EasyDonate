<?php

Route::any('/api/get/servers', function () {
    return DontFollow\Servers\Models\Server::all();
});
