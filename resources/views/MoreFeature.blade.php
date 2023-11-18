@extends('Header-Layout') 
<div style="margin-top:120px;"></div>
<div id="div3" style="width:1000px;height:15px;display:none;  background: linear-gradient( to bottom ,#006D74,#02904C);  margin-left: 120px;margin-bottom: 20px;border: #006D74;border-radius: 10px;"></div>

<div class="container card shadow-sm"  style="background: linear-gradient( to bottom , #02904C,#006D74); color: white; border: #069999; border-radius: 10px; margin-bottom: 10px;">
  <div class="row" >
    <div class="col-6" id="talha" >
      <svg  xmlns="http://www.w3.org/2000/svg" style="margin-top: 50px;" width="50" height="50" fill="currentColor" class="bi bi-mic-fill" id="waqas1" viewBox="0 0 16 16">
        <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
        <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
      </svg>
      <h2 style="margin-left: 60px; margin-top: -50px; font-size: 40px; " class="waqas"> Voice Search</h2>
      <p style="margin-left: 60px; margin-top: -2px; font-size: 20px; font-weight: 500;" class="waqas">Use  the voice search to find <br>information from the Quran <br>Hadith, and other  the notable <br>sources within the Islame App.</p>

    </div>
    <div class="col-6" id="talha">
      <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 50px;" width="50" height="50" fill="currentColor" class="bi bi-book-half" id="waqas1" viewBox="0 0 16 16">
        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
      </svg>
      <h2 style="margin-left: 60px; margin-top: -50px; font-size: 40px; " class="waqas"> Bookmarks</h2>
      <p style="margin-left: 60px; margin-top: -2px; font-size: 20px; font-weight: 500;" class="waqas">Save bookmarks for the Holy<br> Quran to start where one<br> has left off, or use them to mark<br> essential verses worth revisiting.</p>

    </div>
  </div>
</div>

<!--two-->
<div id="div2" style="width:1000px;height:15px;display:none;  background: linear-gradient( to bottom ,#006D74,#02904C);  margin-left: 120px;margin-bottom: 20px;border: #006D74;border-radius: 10px;"></div>

<div class="container card shadow-sm"  style="background: linear-gradient( to bottom ,#006D74,#02904C);  border: #069999; color: white; border-radius: 10px; margin-bottom: 10px;">

  <div class="row">
    <div class="col-6" id="talha"  >
      <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 50px;" width="50" height="50" fill="currentColor" id="waqas1" class="bi bi-card-heading" viewBox="0 0 16 16">
        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
        <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
      </svg>
      <h2 style="margin-left: 60px; margin-top: -50px; font-size: 40px; " class="waqas"> Notes</h2>
      <p style="margin-left: 60px; margin-top: -2px; font-size: 20px; font-weight: 500;" class="waqas">Users can add customized<br> notes for later viewing with<br> each ayat of the Holy Quran <br>for various purposes.</p>

    </div>
    <div class="col-6" id="talha">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" id="waqas1" style="margin-top: 50px;" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
      </svg>
      <h2 style="margin-left: 60px; margin-top: -50px; font-size: 40px; " class="waqas"> Verse of the Moment</h2>
      <p style="margin-left: 60px; margin-top: -2px; font-size: 20px; font-weight: 500;" class="waqas">Get varying verses from the Holy<br> Quran to think and ponder about,<br> and most likely benefit from in<br> this life and the next.</p>

    </div>
  </div>
</div>

<!--three-->
<div id="div1" style="width:1000px;height:15px;display:none;  background: linear-gradient( to bottom ,#006D74,#02904C);  margin-left: 120px;margin-bottom: 20px;border: #006D74;border-radius: 10px;"></div>
<div class="container card shadow-sm"  style=" color: white; background: linear-gradient( to bottom ,#02904C,#006D74); border: #02904C solid; border-radius: 10px; margin-bottom: 30px; ">
  <div class="row">
    <div class="col-6" id="talha" >
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 50px; " width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg>
      <h2 style="margin-left: 60px; margin-top: -50px; font-size: 40px; " class="waqas"> Ayat Recitation</h2>
      <p style="margin-left: 60px; margin-top: -2px; font-size: 20px; font-weight: 500;" class="waqas">Listen to each ayat from <br>the Holy Quran with<br> proper recitation from world<br>renowned Islamic scholars.</p>

    </div>
    <div class="col-6" id="talha">
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 50px;" width="40" height="40" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
          </svg>
      <h2 style="margin-left: 60px; margin-top: -50px; font-size: 40px; " class="waqas"> Hadith of the Moment</h2>
      <p style="margin-left: 60px; margin-top: -2px; font-size: 20px; font-weight: 500;" class="waqas">Get varying Hadith for users<br> to think and ponder over,<br> which will also increase wisdom<br> and knowledge.</p>

    </div>
  </div>
</div>




@include('Footer-Layout')
