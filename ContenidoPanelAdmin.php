<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/paneladmin.css?v=<?php echo time(); ?>"/>   
    <script src="js/paneladmin.js" defer></script>
</head>
<body>
    <main class="main">
        <div class="contenido">
            <nav class="nav-admin">
                <ul class="nav-admin-menu">
                    <li data-target="#servicios">
                        <p>servicios</p>
                    </li>
                    <li data-target="#personal">
                        <p>personal</p>
                    </li>
                    <li data-target="#calendario">
                        <p>calendario</p>
                    </li>
                    <li data-target="#productos">
                        <p>productos</p>
                    </li>
                    <li data-target="#metodospago">
                        <p>metodos de pago</p>
                    </li>
                </ul>
            </nav>

            <div class="datos-menu">
                
                <div data-content class="servicios active" id="servicios">
                    <h1>estos son los servicios</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam, obcaecati recusandae voluptate fugit rerum inventore dolorum temporibus nesciunt at in, omnis libero a dolor quae possimus illo soluta quod, nihil maiores id aspernatur asperiores ipsam ipsum! Quos dolor odio blanditiis veritatis, sequi quo corrupti dolore. Tempore ipsum sapiente blanditiis?</p>
                </div>
                
                <div data-content class="personal" id="personal">
                    <h1>este es el personal</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, perferendis?</p>
                </div>

                <div data-content class="calendario" id="calendario">
                    <h1>estos es el calendario</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio alias est aut quo sunt veniam, commodi ipsum, ratione nostrum ea, rerum quis ut libero repellendus.</p>
                </div>

                <div data-content class="productos" id="productos">
                    <h1>estos son los productos</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, necessitatibus libero non tempore a nulla eveniet aliquam facere suscipit veritatis in, explicabo minima corporis reprehenderit officiis recusandae ad voluptates sint!</p>
                </div>
            
                <div data-content class="metodospago" id="metodospago">
                    <h1>estos son los metodos de pago</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magni eum ex earum sunt nisi magnam quas minus mollitia temporibus voluptate, ipsum nobis a! Veniam modi autem fugit natus? Repudiandae dignissimos labore quasi tempore similique, assumenda placeat quidem, consequatur odit praesentium atque doloremque maiores voluptas earum vitae itaque deserunt. Et error ipsum quam, porro perspiciatis laboriosam molestiae impedit non delectus cumque optio, est aliquam sed illum ratione quo repudiandae saepe.</p>
                </div>
            </div>
        </div>    
    </main>
</body>
</html>