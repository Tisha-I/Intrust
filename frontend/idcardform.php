<?php include("./../admin/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INtrust</title>
    <link rel="stylesheet" href="idcardform.css">
    <link rel = "icon" href ="images/titlelogo.JPG" type = "image/x-icon">
    <script src="https://kit.fontawesome.com/0457335a94.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="idcardhero">
        <div class="idcardnav">
            <div class="idcardnavlogo">
                <img src="./images/intrust_logo.png" alt="">
            </div>
            <nav class="idcardNav__Items">
                    <div class="idcardNav__Linkitems">
                        <div class="idcardNav__Link">g/">Home</a>
                        </div>
                        <div class="idcardNav__Link">
                            <a href="./index.html">Our Process</a>
                        </div>
                        <div class="idcardNav__Link">
                            <a href="./FAQs.html">FAQs</a>
                        </div>
                        <div class="idcardNav__Link">
                            <a href="index.html#CUS">Contact Us</a>
                        </div>
                            <a href="https://www.intrust.n
                </nav>
            <div class="Navbar__Link Navbar__Link-toggle">
                <div class="toggleicon">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
        <script>
            function classToggle() {
                const navs = document.querySelectorAll('.idcardNav__Items')
                navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
            }
            document.querySelector('.Navbar__Link-toggle')
            .addEventListener('click', classToggle);
        </script>
        <div class="idcardform">
            <div class="idcardformh1">
                <h1>&nbsp;&nbsp;  Order Form</h1>
            </div>
            <!-- <center> -->
                <form action="saverequest.php" method="post" enctype="multipart/form-data" class="idcardformform">
                    <div class="idcardNOO">
                        <label for="NOO">Name of Organisation</label> <br>
                        <input type="text" name="name" placeholder="Enter The Name of Your Organisation" required>
                    </div>
                    <div class="idcardNOO">
                        <label for="NOO">Name of Contact Person</label> <br>
                        <input type="text" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="input-icons">
                        <div class="idformemailandphoneno">
                            <div class="idformemail">
                                <label for="idemail">Email</label> <br>
                                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
                            </div>
                            <div class="idformphoneno">
                                <label for="phoneno">Phone Number</label> <br>
                                <input type="tel" minlength="11" maxlength="14" name="phone" placeholder="Enter Your Phone Number" required>
                            </div>
                        </div>
                    </div>
                    <div class="idformaddress">
                        <label for="Address">Address</label> <br>
                        <!-- <input type="text" name="address" placeholder="Enter The Organisation's Address" required> -->
                        <textarea name="address" id="" placeholder="Enter The Organisation's Address" required></textarea>
                    </div>
                    <div class="quantityofcards">
                        <div class="QOCh1">
                            <label for="QOCs">Quantity of Cards</label>
                            <p>Input the amount of cards you wish to request for</p>
                        </div>
                        <div class="QOC pricing">
                              <div class="QOCform-group">
                                <!-- <label for="price">Price</label> -->
                                <input type="text" class="QOCform-control1" name="price" value="700" disabled>
                              </div>
                          
                              <div class="QOCform-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="QOCform-control" name="quantity" value="">
                              </div>
                            <div class="QOCtext total"></div>
                        </div>
                        <!-- <div class="QOCs">
                            <label class="QOCcontainer">
                                <div class="QOCsInput">
                                    <div class="QOCInput">
                                        <input type="radio" checked="checked" name="radio" value="1-10">
                                        <span class="checkmark"></span>
                                    </div> <br>
                                    <div class="QOCps">
                                        <p>1-10</p>
                                    </div>
                                </div>
                            </label>
                            <label class="QOCcontainer">
                                <div class="QOCsInput">
                                    <div class="QOCInput">
                                        <input type="radio" name="radio" value="10-50">
                                        <span class="checkmark"></span>
                                    </div> <br>
                                    <div class="QOCps">
                                        <p>10-50</p>
                                    </div>
                                </div>
                            </label>
                            <label class="QOCcontainer">
                                <div class="QOCsInput">
                                    <div class="QOCInput">
                                        <input type="radio" name="radio" value="50-200">
                                        <span class="checkmark"></span>
                                    </div> <br>
                                    <div class="QOCps">
                                        <p>50-200</p>
                                    </div>
                                </div>
                            </label>
                            <label class="QOCcontainer">
                                <div class="QOCsInput">
                                    <div class="QOCInput">
                                        <input type="radio" name="radio" value="200+">
                                        <span class="checkmark"></span>
                                    </div> <br>
                                    <div class="QOCps">
                                        <p>200+</p>
                                    </div>
                                </div>
                            </label>
                        </div> -->
                    </div>
                    <div class="carddesign">
                        <div class="carddesignselct">
                            <label for="carddesign">Card Design</label><br>
                            <p>Select a predesigned card template or upload your design</p>
                            <div class="carddesignselect1">
                                <select id="try" name="design" aria-placeholder="" required>
                                    <option selected disabled hidden>Select How You Want Your Card Designed</option>
                                    <option value="1" >Pick From A Template</option>
                                    <option value="2">Custom Design</option>
                                </select>
                            </div>
                        </div>

                        <div class="templatedisplay" id="image">
                    <div class='templatetable'>
                    <?php
                        $query = "SELECT * FROM template WHERE status='active';";
                        $result = mysqli_query($link, $query);
                        // $pic = mysqli_query($conn, "SELECT * FROM `users`");
                        ?>
                        <div class="container">
                            <div class="row row-cols-3">
                                <?php
                                    while($row = mysqli_fetch_array($result)){
                                ?>
                                <div class="col">
                                    <img src="./../admin/templates/uploads/<?=$row['picture']?>" alt="<?=$row['picture']?>">
                                    <div class="scrollmenuInput1">
                                        <input type='radio' checked='checked' name='template' value="<?=$row['picture']?>">
                                    </div>
                                </div>
                                <?php } ?>
                                </div>
                        
                    </div>
                        </div>
                        <!-- <center>
                            <div class="templatediv" id="image">
                                <div class="templater">
                                    <div class="template active">
                                        <img src="images/template1.svg" alt="">
                                        <div class="scrollmenuInput1">
                                            <input type="radio" checked="checked" name="template" value="<?=$row['picture']?>">
                                        </div>
                                    </div>
                                    <div class="template">
                                        <img src="images/template3.svg" alt="">
                                        <div class="scrollmenuInput1">
                                            <input type="radio" checked="checked" name="template" value="<?=$row['picture']?>">
                                        </div>
                                    </div>
                                    <div class="template active">
                                        <img src="images/template1.svg" alt="">
                                        <div class="scrollmenuInput1">
                                            <input type="radio" checked="checked" name="template" value="<?=$row['picture']?>">
                                        </div>
                                    </div>
                                    <div class="template">
                                        <img src="images/template3.svg" alt="">
                                        <div class="scrollmenuInput1">
                                            <input type="radio" checked="checked" name="template" value="<?=$row['picture']?>">
                                        </div>
                                    </div>
                                    <div class="navigation">
                                        <i class="fas fa-chevron-left prev-btn"></i>
                                        <i class="fas fa-chevron-right next-btn"></i>
                                    </div>
                                </div>
                            </div>
                        </center> -->
                    </div>
                        <div class="leg">
                            <div>
                                <label for="fileinput">Upload Image</label>
                                <input class="fileinput" type="file" accept=".svg, .jpg, .png" name="custom">
                            </div>
                        </div>
                        <div class="formcheckbox">
                            <h1>Add details to your prefered ID card template.</h1>
                            <p>Please choose information which will be displayed on the ID card from the items below</p>
                             <div class="checkboxitems1">
                                <div class="checkboxitems">
                                    <h2 onclick="toggleidfrontview()" id="idfrontviewButton">ID Front View <i class="fa-solid fa-caret-down"></i></h2>
                                    <div class="idfrontview" id="idfrontview">
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="finfo[]" value="Name">Name
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="finfo[]" value="School/Organization">School/Organization
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="finfo[]" value="Org ID/Matric Number">Organisation ID/Matric Number
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="finfo[]" value="Department">Department
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="finfo[]" value="Picture">Picture
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="finfo[]" value="Signature">Signature
                                            <span class="geekmark"></span>
                                        </label>
                                        <div id="carditems"></div>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" onClick="showTextArea()">Others
                                            <span class="geekmark"></span>
                                            <div class="otherscheck" id="textAreaDiv" style="visibility:hidden;">
                                                <div id="newcarditem">
                                                    <input type="text" name="front_other" class="checkboxothers">
                                                    <a class="newcarditema" id="push">Add</a>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="checkboxitems">
                                    <h2 onclick="toggleidbackview()" id="idbackviewButton">ID Back View <i class="fa-solid fa-caret-down"></i></h2>
                                    <div class="idbackview" id="idbackview">
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="binfo[]" value="Declaration Text">Declaration Text
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="binfo[]" value="Name of Organisation">Name of Organisation
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="binfo[]" value="Address">Address
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="binfo[]" value="Contact Details">Contact Details
                                            <span class="geekmark"></span>
                                        </label>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" name="binfo[]" value="Signature">Signature
                                            <span class="geekmark"></span>
                                        </label>
                                        <div id="carditems2"></div>
                                        <label class="checkboxitemsi">
                                            <input type="checkbox" onClick="showTextArea2()">Others
                                            <span class="geekmark"></span>
                                            <div class="otherscheck" id="textAreaDiv2" style="visibility:hidden;">
                                                <div id="newcarditem2">
                                                    <input type="text" name="back_other" class="checkboxothers" onfocus="this.value=''">
                                                    <a id="push2" class="newcarditema">Add</a>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="placerequestbtn">
                        <button type="submit" name="submit" value="submit">PLACE REQUEST</button>
                    </div>
                </form>
            <!-- </center> -->
        </div>
    </div>
                    
    <script>
      function toggleidbackview() {
        var myidbackview = document.getElementById('idbackview');

        var displaySetting = myidbackview.style.display;

        var idbackviewButton = document.getElementById('idbackviewButton');

        if (displaySetting == 'block') {
          myidbackview.style.display = 'none';
          idbackviewButton.innerHTML = 'ID Back View <i class="fa-solid fa-caret-down"></i>';
        }
        else {
          myidbackview.style.display = 'block';
          idbackviewButton.innerHTML = 'ID Back View <i class="fa-solid fa-caret-up"></i>';
        }
      }
      function toggleidfrontview() {
        var myidfrontview = document.getElementById('idfrontview');

        var displaySetting = myidfrontview.style.display;

        var idfrontviewButton = document.getElementById('idfrontviewButton');

        if (displaySetting == 'block') {
          myidfrontview.style.display = 'none';
          idfrontviewButton.innerHTML = 'ID Front View <i class="fa-solid fa-caret-down"></i>';
        }
        else {
          myidfrontview.style.display = 'block';
          idfrontviewButton.innerHTML = 'ID Front View <i class="fa-solid fa-caret-up"></i>';
        }
      }
        const btn = document.querySelector('#btn');
        const sb = document.querySelector('#try');

        sb.addEventListener('change', () => {
            const image = document.querySelector('#image');
            const leg = document.querySelector('.leg');
            
            if(sb.selectedIndex === 2) {
                image.style.display = 'none';
                leg.style.display = 'block';
            } else {
                image.style.display = 'block';
                leg.style.display = 'none';
            }
        })
        function showTextArea() {
            document.getElementById('textAreaDiv').style.visibility="visible";
        }
        function showTextArea2() {
            document.getElementById('textAreaDiv2').style.visibility="visible";
        }
        document.querySelector('#push').onclick = function(){
            {
                document.querySelector('#carditems').innerHTML += `
                    <div class="carditem">
                        <label class="checkboxitemsi">
                            <input type="checkbox">
                            <span class="geekmark"></span>
                            <span id="carditemname">
                                ${document.querySelector('#newcarditem input').value}
                            </span>
                        </label>
                        <button class="delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                `;

                var current_carditems = document.querySelectorAll(".delete");
                for(var i=0; i<current_carditems.length; i++){
                    current_carditems[i].onclick = function(){
                        this.parentNode.remove();
                    }
                }
            }
        }
        document.querySelector('#push2').onclick = function(){
            {
                document.querySelector('#carditems2').innerHTML += `
                    <div class="carditem2">
                        <label class="checkboxitemsi">
                            <input type="checkbox">
                            <span class="geekmark"></span>
                            <span id="carditemname2">
                                ${document.querySelector('#newcarditem2 input').value}
                            </span>
                        </label>
                        <button class="delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                `;

                var current_carditems = document.querySelectorAll(".delete");
                    for(var i=0; i<current_carditems.length; i++){
                        current_carditems[i].onclick = function(){
                            this.parentNode.remove();
                        }
                    }
            }
        }
    //     const templater = document.querySelector(".templater");
    // const nextBtn = document.querySelector(".next-btn");
    // const prevBtn = document.querySelector(".prev-btn");
    // const templates = document.querySelectorAll(".template");
    // const templateIcons = document.querySelectorAll(".template-icon");
    // const numberOftemplates = templates.length;
    // var templateNumber = 0;

    // nextBtn.addEventListener("click", () => {
    //   templates.forEach((template) => {
    //     template.classList.remove("active");
    //   });
    //   templateIcons.forEach((templateIcon) => {
    //     templateIcon.classList.remove("active");
    //   });

    //   templateNumber++;

    //   if(templateNumber > (numberOftemplates - 1)){
    //     templateNumber = 0;
    //   }

    //   templates[templateNumber].classList.add("active");
    //   templateIcons[templateNumber].classList.add("active");
    // });

    // prevBtn.addEventListener("click", () => {
    //   templates.forEach((template) => {
    //     template.classList.remove("active");
    //   });
    //   templateIcons.forEach((templateIcon) => {
    //     templateIcon.classList.remove("active");
    //   });

    //   templateNumber--;

    //   if(templateNumber < 0){
    //     templateNumber = numberOftemplates - 1;
    //   }

    //   templates[templateNumber].classList.add("active");
    //   templateIcons[templateNumber].classList.add("active");
    // });
    // var playtemplater;

    // var repeater = () => {
    //   playtemplater = setInterval(function(){
    //     templates.forEach((template) => {
    //       template.classList.remove("active");
    //     });
    //     templateIcons.forEach((templateIcon) => {
    //       templateIcon.classList.remove("active");
    //     });

    //     templateNumber++;

    //     if(templateNumber > (numberOftemplates - 1)){
    //       templateNumber = 0;
    //     }

    //     templates[templateNumber].classList.add("active");
    //     templateIcons[templateNumber].classList.add("active");
    //   }, 5000);
    // }
    // repeater();
    // templater.addEventListener("mouseover", () => {
    //   clearInterval(playtemplater);
    // });

    // templater.addEventListener("mouseout", () => {
    //   repeater();
    // });
    const priceInput = document.querySelector('[name=price]');
                        const quantityInput = document.querySelector('[name=quantity]');
                        const total = document.querySelector('.total');
                        const quantityLabel = document.querySelector('.quantity-label');

                        function calculateCost() {
                        const price = priceInput.value;
                        const quantity = quantityInput.value;
                        const cost = price * quantity;
                        console.log(cost);
                        total.innerText = "Approximately ₦" + cost.toFixed(2);
                        }

                        function updateQuantityLabel() {
                        const quantity = quantityInput.value;
                        quantityLabel.innerText = quantity;
                        }

                        calculateCost();

                        priceInput.addEventListener('input', calculateCost);
                        quantityInput.addEventListener('input', calculateCost);
                        quantityInput.addEventListener('input', updateQuantityLabel);

    </script>
</body>
</html>
<!-- <div class="scrollmenudiv">
    <div class="scrollmenu">
        <?php

            $query = "SELECT * FROM template WHERE status='active';";
            $result = mysqli_query($link, $query);

            while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="scrollmenuoption">
            <img src="./../admin/templates/uploads/<?=$row['picture']?>" alt="<?=$row['picture']?>">
            <div class="scrollmenuInput">
                <input type="radio" checked="checked" name="template" value="<?=$row['picture']?>">
            </div>
        </div>
        <?php } ?>
        
    </div>
</div> -->