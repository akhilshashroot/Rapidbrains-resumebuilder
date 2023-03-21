<!DOCTYPE HTML>

<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

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
<table border="0">

   <tbody><tr>
    <td ></td>
    <td style="padding-left:510px;" ><img width="100" src="https://www.rapidbrains.com/assets/img/svg/rblogo-mail.png" ></td>
    </tr></tbody></table>
    <header id="info">
   <h1 style="text-transform:uppercase;">{!! $data['fullname'] !!}</h1>
   <span>POSITION: {!! $data['position'] !!}</span></br>
        <span>TALENT ID: {!! $data['talentid'] !!}</span>
       <br><br>
        <span style="font-size: 16px;font-size: 10px;">+91 977 8426 319 <br>
        {!! $data['email'] !!} <br>
               Ground Floor, Athulya, Infopark,
               Kochi, Kerala, India<br>
               www.rapidbrains.com

            </span>
    </header>
    <section id="statement">
        <h2 style="border-bottom: 1px solid black;font-size: 17px;">Profile</h2>
      

        <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle" style="font-size: 10px;">{!! $data['summary'] !!}</span>
            </div>
          
          
        </div>
     
    </section>
    @if(count($data['kt_docs_repeater_basic_count'])>0)
    <section id="employment">
        <h2 style="border-bottom: 1px solid black;font-size: 17px;">Experience</h2>
        @foreach($data['experience'] as $exp)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span style="font-size: 12px;text-transform:uppercase;">{!! $exp['jobtitle'] !!}</span>
                @if(!isset($exp['to']))
                <span style="padding-left:320px;font-size: 10px;">{!! date("M-Y", strtotime($exp['from'])) !!} - Present</span>
                @else
                <span style="padding-left:320px;font-size: 10px;">{!! date("M-Y", strtotime($exp['from'])) !!} - {!! date("M-Y", strtotime($exp['to'])) !!}</span>
                @endif
            </div>
            <div class="tablerow">
                <span style="font-size: 10px;">{!! $exp['employer'] !!}</br>
               {!! $exp['city'] !!},{!! $exp['state'] !!},{!! $exp['country'] !!}</span>
            </div>
            <li>
                <span style="font-size: 10px;">{!! $exp['job_description'] !!}</span></li>
                <li>
                <span style="font-size: 10px;">{!! $exp['job_projects'] !!}</span>
    </li>
            </div>
        </section>
        @endforeach
       
    </section>
    @endif
    <section id="skills">
        <h2 style="border-bottom: 1px solid black;font-size: 17px;">Skills</h2>
        <div class="jobtable">
        <div class="tablerow">
            <span class="jobtitle" style="font-size: 10px;">{!! $data['skills'] !!}</span>
            </div>
        </div>
    </section>
    @if(count($data['kt_docs_repeater_basi_count'])>0)
    
    <section id="projects">
        <h2 style="border-bottom: 1px solid black;font-size: 17px;">Projects</h2>
        @foreach($data['projects'] as $prj)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle" style="font-size: 12px;">{!! $prj['project_name'] !!}</span>
                <span style="font-size: 10px;">{!! $prj['project_duration'] !!}</span>
            </div>
            <li>
                <span style="font-size: 10px;">{!! $prj['project_description'] !!}</span>
    </li><li>
                <span style="font-size: 10px;">{!! $prj['roles_responsibility'] !!}</span>
    </li>
            </div>
        </section>
        @endforeach
    </section>
      @endif
      @if(count($data['certifications_count'])>0)
     
    <section id="certifications">
        <h2 style="border-bottom: 1px solid black;font-size: 17px;">Certifications</h2>
        @foreach($data['certifications'] as $cert)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle" style="font-size: 12px;">{!! $cert['certification'] !!}</span>
            </div>
            <div class="tablerow">
                <span style="font-size: 10px;">{!! $cert['certification_description'] !!}</span>
            </div>
            </div>
        </section>
        @endforeach
    </section>
      @endif
      @if(count( $data['kt_docs_repeater_education_count'])>0)
    <section id="education">
        <h2 style="border-bottom: 1px solid black;font-size: 17px;">Education</h2>
        @foreach($data['education_details'] as $edu)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle" style="font-size: 10px;">{!! $edu['education_course'] !!}</span>
            </div>
            <div class="tablerow" style="font-size: 10px;">
                <span>{!! $edu['education_institute'] !!},{!! $edu['education_location'] !!}</span>
            </div>
            <div class="tablerow" style="font-size: 10px;">
                <span>{!! $edu['education_duration'] !!}</span>
            </div>
            </div>
        </section>
       @endforeach
    </section>
    @endif
   
</body>
</html>