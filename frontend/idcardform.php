<?php include("../admin/connection.php"); ?>
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
</head>
<body>
    <div class="idcardhero">
        <div class="idcardnav">
            <div class="idcardnavlogo">
                <img src="./images/intrust_logo.png" alt="">
            </div>
            <nav class="idcardNav__Items">
                    <div class="idcardNav__Linkitems">
                        <div class="idcardNav__Link">
                            <a href="https://www.intrust.ng/">Home</a>
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
                <h1>Requisition Form</h1>
            </div>
            <form action="saverequest.php" method="post" enctype="multipart/form-data" class="idcardformform">
                <div class="idcardNOO">
                    <label for="NOO">Name Of Organisation</label> <br>
                    <input type="text" name="name" placeholder="Enter The Name Of Your Organisation" required>
                </div>
                <div class="input-icons">
                    <div class="idformemailandphoneno">
                        <div class="idformemail">
                            <label for="idemail">Email</label> <br>
                            <input type="email" name="email" id="email" placeholder="Enter Company Email" required>
                        </div>
                        <div class="idformphoneno">
                            <label for="phoneno">Phone Number</label> <br>
                            <input type="tel" minlength="11" maxlength="15" name="phone" placeholder="Enter Company Number" required>
                        </div>
                    </div>
                </div>
                <div class="idformaddress">
                    <label for="Address">Address</label> <br>
                    <input type="text" name="address" placeholder="Enter The Address Of Your Organisation" required>
                </div>
                <div class="quantityofcards">
                    <div class="QOCh1">
                        <label for="QOCs">Quantity Of Cards</label>
                    </div>
                    <div class="QOCs">
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
                    </div>
                </div>
                <div class="carddesign">
                    <div class="carddesignselct">
                        <label for="carddesign">Card Design</label><br>
                        <div class="carddesignselect1">
                            <select id="try" name="design" aria-placeholder="" required>
                                <option selected disabled hidden>Select How You Want Your Card Designed</option>
                                <option value="1" >Pick From A Template</option>
                                <option value="2">Custom Design</option>
                            </select>
                        </div>
                    </div>
                    <div class="scrollmenudiv" id="image">
                        <div class="scrollmenu">
                            <?php

                                $query = "SELECT * FROM template;";
                                $result = mysqli_query($link, $query);

                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="scrollmenuoption">
                                <img src="./../admin/templates/uploads/<?=$row['picture']?>" alt="<?=$row['picture']?>">
                                <!-- <img src="images/template1.svg" alt=""> -->
                                <div class="scrollmenuInput">
                                    <input type="radio" checked="checked" name="template" value="<?=$row['picture']?>">
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                    <div class="leg">
                        <div>
                            <label for="fileinput">Upload Image</label>
                            <input class="fileinput" type="file" name="custom">
                        </div>
                            
                    </div>
                    <div class="formcheckbox">
                        <h1>Card Details</h1>
                         <div class="checkboxitems1">
                            <div class="checkboxitems">
                                <h2>Front Of ID Card</h2>
                                <label class="checkboxitemsi">
                                    <input type="checkbox" name="finfo[]" value="Name">Name
                                    <span class="geekmark"></span>
                                </label>
                                <label class="checkboxitemsi">
                                    <input type="checkbox" name="finfo[]" value="School/Organization">School/Organization
                                    <span class="geekmark"></span>
                                </label>
                                <label class="checkboxitemsi">
                                    <input type="checkbox" name="finfo[]" value="Org ID/Matric Number">Org ID/Matric Number
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
                            <div class="checkboxitems">
                                <h2>Back Of ID Card</h2>
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
                <div class="placerequestbtn">
                    <button name="submit">PLACE REQUEST</button>
                </div>
            </form>
        </div>
    </div>
                    
    <script>
        const btn = document.querySelector('#btn');
        const sb = document.querySelector('#try');

        sb.addEventListener('change', () => {
            const image = document.querySelector('#image');
            const leg = document.querySelector('.leg');
            
            if(sb.selectedIndex === 2) {
                image.style.display = 'none';
                leg.style.display = 'block';
            } else {
                image.style.display = 'flex';
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
    </script>
</body>
</html>