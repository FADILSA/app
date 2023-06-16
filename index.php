
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Gaming</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #ffffff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        li {
            border: 2px solid #ffffff;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            text-align: center;
            margin-bottom: 20px;
            flex-basis: calc(50% - 20px);
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .social-buttons a {
            margin: 0 10px;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #121212;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .order-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
        }
        footer {
  background-color: #121212;
  color: #ffffff;
  padding: 20px 0;
}

footer p {
  margin: 0;
  font-size: 14px;
  line-height: 1.5;
}

footer a {
  color: #ffffff;
  text-decoration: none;
}

footer a:hover {
  text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang di toko Prime Gaming kami!</h1>
        <p>Kami menawarkan Prime Gaming dengan harga terjangkau:</p>
        <ul>
            <li>
                <a href="#" onclick="showProductDetails('Prime Gaming 7 hari', '1.jpg', 'Prime Gaming 7 hari: 10k');">
                    <img src="1.jpg" alt="Prime Gaming 7 hari">
                    <p>Prime Gaming 7 hari: 10k</p>
                </a>
            </li>
            <li>
                <a href="#" onclick="showProductDetails('Prime Gaming 30 hari', '2.jpg', 'Prime Gaming 30 hari: 25k');">
                    <img src="2.jpg" alt="Prime Gaming 30 hari">
                    <p>Prime Gaming 30 hari: 25k</p>
                </a>
            </li>
            <li>
                <a href="#" onclick="showProductDetails('Prime Gaming 60 hari', '3.jpg', 'Prime Gaming 60 hari: 45k');">
                    <img src="3.jpg" alt="Prime Gaming 60 hari">
                    <p>Prime Gaming 60 hari: 45k</p>
                </a>
            </li>
            <li>
                <a href="#" onclick="showProductDetails('Prime Gaming 90 hari', '4.jpg', 'Prime Gaming \n test \n90 hari: 65k');">
                    <img src="4.jpg" alt="Prime Gaming 90 hari">
                    <p>Prime Gaming 90 hari: 65k</p>
                </a>
            </li>
                        <li>
                <a href="#" onclick="showProductDetails('Prime Gaming 90 hari', '4.jpg', 'Prime Gaming \n test \n90 hari: 65k');">
                    <img src="4.jpg" alt="Prime Gaming 90 hari">
                    <p>Prime Gaming 90 hari: 65k</p>
                </a>
            </li>
            <li>
                <a href="#" onclick="showProductDetails('Prime Gaming 90 hari', '4.jpg', 'Prime Gaming \n test \n90 hari: 65k');">
                    <img src="4.jpg" alt="Prime Gaming 90 hari">
                    <p>Prime Gaming 90 hari: 65k</p>
                </a>
            </li>
        </ul>

        <div class="social-buttons">
            <a href="https://www.facebook.com/ifanae" target="_blank">
                <img src="fb.png" alt="Facebook" width="32" height="32">
            </a>
            <a href="https://wa.me/62895328228540" target="_blank">
                <img src="wa.png" alt="WhatsApp" width="32" height="32">
            </a>
        </div>

        <h2>Testimoni:</h2>
        <div class="fb-post" data-href="https://www.facebook.com/100008278899174/posts/pfbid0TRiRKSjceiBYAK8xcVVZWEiUbatu2dd5zHi8o9ApM8WvAWfvU3ALyjnPP7hRuwnCl/?app=fbl" data-width=""></div>
    </div>
    
    <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; 2023 AMZIFAN. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>


    <!-- Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle"></h2>
            <img id="modalImage" src="" alt="" width="150" Height="200">
            <p id="modalPrice"></p>
            <button class="order-button" onclick="orderProduct();">Order Sekarang</button>
        </div>
    </div>
    
    <script>
        const modal = document.getElementById("productModal");
        const span = document.getElementsByClassName("close")[0];
        let currentProduct = '';

        function showProductDetails(title, imageSrc, price) {
            currentProduct = title;
            document.getElementById("modalTitle").innerText = title;
            document.getElementById("modalImage").src = imageSrc;
            document.getElementById("modalImage").alt = title;
            document.getElementById("modalPrice").innerText = price;
            modal.style.display = "block";
        }

        function orderProduct() {
            const orderLink = generateWhatsAppLink(currentProduct);
            window.location.href = orderLink;
        }

        function generateWhatsAppLink(product) {
            const phone_number = '62895328228540'; // Ganti dengan nomor WhatsApp Anda
            const message = encodeURIComponent(`Hallo, saya ingin memesan ${product}`);
            return `https://wa.me/${phone_number}?text=${message}`;
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v11.0" nonce="YsD3zJfG"></script>
</body>
</html>
