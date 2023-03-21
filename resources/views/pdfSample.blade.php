<!DOCTYPE HTML>

<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


    <meta charset="UTF-8">
    <title>Resume</title>
    <style>
body {
    margin: 40px;
    font-family: 'Roboto';
    font-size: 12pt;
}

header {
    font-family: 'Roboto';
    padding-bottom: 10px;
    margin-top: -100px;
    /* border-bottom: 1px solid black !important; */
}

header h1 {
    font-size: 20pt;
    letter-spacing: 2pt;
    border-bottom: 1px solid black;
    margin-bottom: 4px;
}

header span {
    font-size: 10pt;
    /* float: right; */
}

section h2 {
    font-family: 'Roboto';
    font-size: 14pt;
}

section p {
    margin-left: 40px;
}

section.coverletter {
    margin-top: 40px;
}

section.coverletter p {
    margin-left: 0px;
}

section ul {
    list-style-type: circle;
}

.jobtable {
    display: table;
    width: 100%;
    /*border-bottom: 1px solid black;*/
    margin-left: 20px;
}

.edtable {
  /* //  display: table; */
    width: 100%;
    margin-left: 20px;
    padding-bottom: 15px;
}

.skillstable {
    display: table;
    width: 100%;
}

.table {
    display: table;
    margin-left: 20px;
}

.tablerow {
    display: table-row;
}

.jobtitle {
    display: table-cell;
    /*font-style: italic;*/
}

.right {
    display: table-cell;
    text-align: right;
}
.right1 {
    display: table-cell;
   
}
.cell {
    display: table-cell;
}

.onlinecell {
    /*font-style: italic;*/
    padding-right: 10px;
}

.urlcell {
    display: table-cell;
    letter-spacing: 1px;
}

.pagebreak {
    page-break-before: always;
}
.image {
        flex-basis: 40%
      }
 .text {
        font-size: 20px;
        padding-left: 20px;
}
.container1 {
        display: flex;
        align-items: center;
        justify-content: center
      }
#container {
    position: relative;    
    top: -64px;
    margin-left:-90px  !important;
    margin-right:-90px  !important;

}

#example {
   position: absolute;
   top: -48px;
    left: 10px;
    padding: 60px;
 
}
.full-width{
  
    
        left: 100px !important;
        right: 0 !important;
}
.space{
    margin: 10px 0;
}
    </style>
</head>

<body>
<!-- <div class="container1">
    <div class="text">
        <h1>Akhil Soman</h1>
    <div>
 <div class="image">

<img width="60" src="http://accounts.hashroot.com/assets/media/logo.png"/>

</div>	

</div> -->

<div id="container">
<img style="width:100%;" class="full-width" src="https://www.rapidbrains.com/assets/img/svg/header-rb.png" >
    <div id="example"><br>
    <span style="text-transform:uppercase;font-size:28;color:#343f52; letter-spacing: 2px;"><b>{!! $data['fullname'] !!}</b></span><br>
    <div style="padding-top:10px;"></div>
   <span  style="text-transform:uppercase; letter-spacing: 2px;color:#464a4e;">{!! $data['position'] !!}</span><br>
   <div style="padding-top:10px;"></div>
        <span style="text-transform:uppercase; letter-spacing: 2px;color:#464a4e">TALENT ID: {!! $data['talentid'] !!}</span>
      

    </div>
</div>

    <header id="info">
    <table style="margin-top: 45px;">

<tbody><tr>
 <td ><img style="width:8%;" class="full-width" src="https://www.rapidbrains.com/assets/img/icons/phone.png" > &nbsp;&nbsp;+91 977 8426 319 
 </td>

 <td style="padding-left:182px;"><img style="width:8%;" class="full-width" src="https://www.rapidbrains.com/assets/img/icons/2.png" > &nbsp;&nbsp;{!! $data['email'] !!}
 </td>
 <!-- <td style="padding-left:62px;"> Ground Floor, Athulya, Infopark,
               Kochi, Kerala, India<br>

               www.rapidbrains.com
</td> -->

 
 </tr>
 <tr>
 <td ><img style="width:8%;" class="full-width" src="https://www.rapidbrains.com/assets/img/icons/3.png" >&nbsp;  Ground Floor, Athulya, Infopark, Kochi, Kerala, India</td>

 <td style="padding-left:182px;"><img style="width:8%;" class="full-width" src="https://www.rapidbrains.com/assets/img/icons/4.png" >&nbsp;&nbsp;  www.rapidbrains.com
 </td>
 <!-- <td style="padding-left:62px;"> Ground Floor, Athulya, Infopark,
               Kochi, Kerala, India<br>

               www.rapidbrains.com
</td> -->

 
 </tr>



</tbody></table>

    </header>
    <section id="statement">
        <h2 style="border-bottom: 1px solid black;">Profile</h2>
      

        <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle">{!! $data['summary'] !!}</span>
            </div>
          
          
        </div>
     
    </section>
    @if(count($data['kt_docs_repeater_basic_count'])>0)
    <section id="employment">
        <h2 style="border-bottom: 1px solid black;">Experience</h2>
        @foreach($data['experience'] as $exp)
        <li>
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span >{!! $exp['jobtitle'] !!}</span>
                @if(!isset($exp['to']))
                <span style="padding-left:320px;">{!! date("M-Y", strtotime($exp['from'])) !!} - Present</span>
                @else
                <span style="padding-left:320px;">{!! date("M-Y", strtotime($exp['from'])) !!} - {!! date("M-Y", strtotime($exp['to'])) !!}</span>
                @endif
            </div>
            <div class="tablerow">
                <span>{!! $exp['employer'] !!}</br>
               {!! $exp['city'] !!},{!! $exp['state'] !!},{!! $exp['country'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $exp['job_description'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $exp['job_projects'] !!}</span>
            </div>
            </div>
        </section>
    </li>
        @endforeach
       
    </section>
    @endif
    <section id="skills">
        <h2 style="border-bottom: 1px solid black;">Skills</h2>
        <div class="jobtable">
        <div class="tablerow">
            <span class="jobtitle">{!! $data['skills'] !!}</span>
            </div>
        </div>
    </section>
    @if(count($data['kt_docs_repeater_basi_count'])>0)
    
    <section id="projects">
        <h2 style="border-bottom: 1px solid black;">Projects</h2>
        @foreach($data['projects'] as $prj)
        <li>
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle">{!! $prj['project_name'] !!}</span>
                <span >{!! $prj['project_duration'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $prj['project_description'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $prj['roles_responsibility'] !!}</span>
            </div>
            </div>
        </section>
    </li>
        @endforeach
    </section>
      @endif
      @if(count($data['certifications_count'])>0)
     
    <section id="certifications">
        <h2 style="border-bottom: 1px solid black;">Certifications</h2>
        @foreach($data['certifications'] as $cert)
        <li>
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle">{!! $cert['certification'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $cert['certification_description'] !!}</span>
            </div>
            </div>
        </section>
    </li>
        @endforeach
    </section>
      @endif
      @if(count( $data['kt_docs_repeater_education_count'])>0)
    <section id="education">
        <h2 style="border-bottom: 1px solid black;">Education</h2>
        @foreach($data['education_details'] as $edu)
      <li>
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle">{!! $edu['education_course'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $edu['education_institute'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $edu['education_duration'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $edu['education_location'] !!}</span>
            </div>
            </div>
        </section>
    </li>
       @endforeach
    </section>
    @endif
   
</body>
</html>