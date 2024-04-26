import './bootstrap';
import './echo.js';


window.Echo.channel('SomeChannel')
    .listen('SomeEvent', (e) => {
        console.log({"e": e});
    });
