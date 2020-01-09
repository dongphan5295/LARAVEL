<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="layouts/styles.css" />

    </head>
    <body>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <form>
                <div id="data">
                    <label>Product Description:</label>
                   <p>{{$productDescription}}</p>

                    <label>List Price:</label>
                    <p>{{$price}} VND</p>

                    <label>Discount Percent:</label>
                    <p>{{$discountPercent}}%</p>

                    <label>Discount Amount:</label>
                    <p>{{$discountamount}} VND</p>

                    <label>Discount Price:</label>
                     <p>{{$discountprice}} VND </p>
                </div>
            </form>
        </div>
    </body>
</html>
