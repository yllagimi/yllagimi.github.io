
<center>
 
   <form  action="data.php" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
   
<div class="container">
<fieldset id="input1-wrapper">
<input placeholder="Your ID" type="number" name="id" value='' autofocus>
<input placeholder="TeleNovela Username" type="text" name="username" size="40" value=''> <br>
<!--
<input placeholder="Your First Name" type="text" name="fname" size="40" value=''>
<input placeholder="Your Last Name" type="text" name="lname" size="40" value=''> <br>
-->
<a>E-mail: <input type="text" id="email" name="email"></a><br>

<a href="register.php"> New User</a><br>
</fieldset>
</div>
<br>
<h class="tn1">The Audience</h><br>
<div class="container">
<fieldset id="input1-wrapper">
<p> Tell us a few things about your audience, for best advert placement.</p>
<a> Audience Gender:</a><br>
<select name="aud_gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Any">Any Gender</option>
</select><br>
<a> Audience Age</a><br>
<select name="aud_age">
<option value="12-16">12-16</option>
<option value="17-18">17-18</option>
<option value="19-22">19-22</option>
<option value="24-29">24-29</option>
<option value="30-39">30-39</option>
<option value="40-49">40-49</option>
<option value="50-59">50-59</option>
<option value="60+">60+</option>
<option value="12-60+">All Ages</option>
</select><br>
    
     <a> Audience Mood Target </a><br>
<input type="checkbox" name="moodneut" value=1>Neutral
<input type="checkbox"  name="moodhappy" value=1>Happy
<input type="checkbox" name="moodsad" value=1>Sad
<input type="checkbox" name="moodangry" value=1>Angry
<input type="checkbox"  name="moodafraid" value=1>Afraid

    

<p> Select all categories that apply to your advert</p>
<input type="checkbox" name="hlth" value="Health and Wellness"> Health and Wellness<br>
<input type="checkbox" name="food" value="Restaurants and Food"> Restaurants and Food<br>
<input type="checkbox" name="bty" value="Beauty and Pharmaceuticals"> Beauty and Pharmaceuticals"<br>
<input type="checkbox" name="sports" value="Sports"> Sports <br>
<input type="checkbox" name="music" value="Music and Entertainment" > Music and Entertainment<br>
<input type="checkbox" name="civic" value="Local and Civic Issues" > Local and Civic Issues<br>

<p> Tell us a few keywords associated with your advert</p>
<input placeholder="keyword 1" type ="text" name="clipkwd1"> <br>
<input placeholder="keyword 2" type ="text" name="clipkwd2"> <br>
<input placeholder="keyword 3" type ="text" name="clipkwd3"> <br>
<textarea id="text" cols="40" rows="4" name="clipdesc"
placeholder="Say something about your advert..."></textarea>
</fieldset>
</div>
<br>
<h class="tn1">The Location</h><br>
<div class="container">
<fieldset id="input2-wrapper">
<br>
<p> Here, tell us some information about the locaiton where you'd like the advert to be shown. Also, specify the advert <strong>start</strong> and <strong>end </strong>date and time.</p>
<a> Type of Advert:</a><br>
<select name="cliptype">
<option value="poster">Poster</option>
<option value="short_v">Short Video (Under 2 minutes)</option>
<option value="long_v">Long Video (Over 2 minutes)</option>
<option value="other">Other</option>
</select><br>
<a> Location to display advert:</a><br>

<select name="cliploc1">
<option value="mallplaza1">MallPlaza, Las Condes</option>
<option value="UAI_Ed_A">UAI Edificio A</option>
<option value="UAI_Ed_B">UAI Edificio B</option>
<option value="m_bella_artes">Metro - Bella Artes</option>
<option value="m_armas">Metro - Plaza de Armas</option>
</select><br><br>
<a>Advert Start Date:</a>
<input type="date" placeholder="Advert Start Date:(mmddyyyy)" size="40" name="tstartdate"><br>
<a>Advert End Date:</a>
<input placeholder="Advert End Date:(mmddyyyy)" type="date" size="40" name="tenddate"> <br><br>
<a> Hour Display Preferences (Select all that apply) </a><br>
<input type="checkbox" name="hr0611" value=1>06AM-11AM <input type="checkbox"  name="hr1114" value=1>11AM-2PM
<input type="checkbox" name="hr1418" value=1>2PM-6PM
<input type="checkbox" name="hr1821" value=1>6PM-9PM
    <input type="checkbox"  name="hr2124" value=1>9PM-12PM
    <input type="checkbox" name="hr2406"  value=1>12AM-6AM
    
<br>
    <a> Day Display Preferences (Select all that apply) </a><br>
<input type="checkbox" name="clipmon" value=1>Monday
<input type="checkbox"  name="cliptue" value=1>Tuesday
<input type="checkbox" name="clipwed" value=1>Wednesday
<input type="checkbox" name="clipthu" value=1>Thursday
    <input type="checkbox"  name="clipfri" value=1>Friday
    <input type="checkbox" name="clipsat"  value=1>Saturday
        <input type="checkbox" name="clipsun"  value=1>Sunday

<br><br>
<div>
<input type="file" name="filename">
</div>
</fieldset> 
   
    <input type="submit" name="submit" value="Submit"/> 
    </div>
    </form> 
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</center>

 