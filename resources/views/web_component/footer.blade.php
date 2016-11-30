<style>
    footer {
        margin-top: 50px;
        background-color: #2b2b2b;
        color: #FFFFFF;
        bottom: 0;
        height: auto;
    }

    .footer-middle {
        text-align: left;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .footer-left {
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
    }

    .footer-right {
        padding-top: 20px;
        text-align: right;
    }

    .shabu-social a {
        float: right;
        margin-bottom: 10px;

    }

    .shabu-social a img {
        width: 70%;
    }

    .shabu-contact {
        clear: right;
    }
</style>
<footer class="container-fluid">
    <div class="row">
        <div class="col-md-2 footer-left">
            <img src="{{ asset('resources/header').'/logo.png' }}">
        </div>
        <div class="col-md-4 footer-middle">
            <p>Wasant studio สาขา 2 หน้ามหาวิทยาลัยสยาม</p>
            <hr align="left" width="50%">
            <p>Wasant studio สาขา 3 ท่าพระ</p>
        </div>

        <div class="col-md-6 footer-right">
            <h4 style="color: #ef810a">
                Contact Us
            </h4>
            <div class="shabu-social">
                <a href="https://www.facebook.com/"><img
                            src="{{ asset('resources/footer').'/facebook.png' }}"></a>
                <a href="#"><img src="{{ asset('resources/footer').'/instagram.png' }}"></a>
                <a href="#"><img src="{{ asset('resources/footer').'/Line.png' }}"></a>
                <a href="#"><img src="{{ asset('resources/footer').'/twitter.png' }}"></a>
            </div>
            <div class="shabu-contact">
                <h5>shabubuteung@gmail.com</h5>
                <h5>088-251-1269,0823820505</h5>
            </div>
        </div>
    </div>
</footer>