<?php include ('../layouts/header.php'); ?>
<?php include ('../layouts/navbar.php'); ?>
<script src=" script.js"></script>
<h1 class="text-center">PROJECT</h1>
<div class="container" style="background-color:lightblue">
    <div class="row">
        <h4 class=" display-6 text-center"> Create a new account</h4>
        <hr>
        <form action="" method="post">
            <div class="row">
                <div class="col m-2">
                    <input class="form-control" id="inputdefault" type="text" placeholder="Enter first name" onblur="fname()">
                    <span id="fnameerror" class="text-danger"></span>
                </div>
                <div class="col m-2">
                    <input class="form-control" id="inputdefault1" type="text" placeholder="Enter last name" onblur="lname()">
                    <span id="lnameerror" class="text-danger"></span> 
                </div>
            </div>
            <input class="form-control m-2" id="inputdefault2" type="text" placeholder="Enter email-ID or mobile number" onblur="email()">
            <span id="emailerror" class="text-danger"></span>
            <div class="m-2">
                <input class="form-control m-2" id="inputdefault3" type="text" placeholder="New pasword" onblur="password()">
                <span id="passworderror" class="text-danger"></span>
            </div>
            <span> </span>
            <!-- <div class="m-2">
            <label for="date">Date of birth?</label><br>
            <select name="date" id="date">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="month" id="month">
                <option value="january">january</option>
                <option value="feb">feb</option>
                <option value="march">march</option>
                <option value="april">april</option>
                <option value="may">may</option>
                <option value="june">june</option>
                <option value="july">july</option>
                <option value="august">august</option>
                <option value="september">september</option>
                <option value="october">october</option>
                <option value="november">november</option>
                <option value="december">december</option>s
            </select>
            <select name="year" id="year">
                <option value="below 1999"> below 1999</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="above 2010">above 2010</option>
            </select><br> -->
            </div>
            <span></span>
            <div class="m-2">
               <lable>Gender?</lable><br>
                <input type="radio" id="html" name="Gender?" value="HTML">
                <label for="html">Female</label>
                <input type="radio" id="css" name="Gender?" value="CSS">
                <label for="css">Male</label>
                <input type="radio" id="javascript" name="Gender?" value="JavaScript">
                <label for="javascript">Other</label><br>
                <hr>
                <div class="text-center m-2">
                    <p>People who use our service may have uploaded your contact information</p>
                    <button type="button" class="btn btn-success btn-lg" onclick="submitform()" href="">sign up</button><br>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?php include ('../layouts/footer.php'); ?>