<!DOCTYPE HTML>

<html>
<head>
    <meta charset="UTF-8">
    <title>{!! $title !!}</title>
    <style>
body {
    margin: 40px;
    font-family: "Adobe Caslon Pro", "Minion Pro", serif;
    font-size: 12pt;
}

header {
    font-family: "Trajan Pro", serif;
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
    font-family: "Trajan Pro", serif;
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
    border-bottom: 1px solid black;
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
    text-indent:50px;
}

.jobtitle {
    display: table-cell;
    font-style: italic;
}

.right {
    display: table-cell;
    text-align: right;
}

.cell {
    display: table-cell;
}

.onlinecell {
    font-style: italic;
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
    <td style="padding-left:800px;" ><img width="100" src="https://www.rapidbrains.com/assets/img/svg/rblogo-mail.png" ></td>
    </tr></tbody></table>
    <header id="info">
   <h2>{!! $fullname !!}</h2>
        <span style="text-indent:50px;">TALENT ID: {!! $talentid !!}</span><br>
        {!! $company_address !!}
    </header>
    <section id="statement">
        <h2>Profile</h2>
        <p style="text-indent:50px;">{!! $summary !!}
       </p>
    </section>
    <section id="employment">
        <h2>Experience</h2>
        @foreach($experience as $exp)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle">{!! $exp['jobtitle'] !!}</span>
                <span class="right">{!! $exp['from'] !!} - {!! $exp['to'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $exp['employer'] !!}</span>
                <span class="right">{!! $exp['city'] !!},{!! $exp['state'] !!},{!! $exp['country'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $exp['job_description'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $exp['job_projects'] !!}</span>
            </div>
            </div>
        </section>
        @endforeach
       
    </section>
    <section id="skills">
        <h2>Skills</h2>
        <div class="skillstable">
            <div class="tablerow">
            <span>{!! $skills !!}</span>
            </div>
        </div>
    </section>
    <section id="projects">
        <h2>Projects</h2>
        @foreach($projects as $prj)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle">{!! $prj['project_name'] !!}</span>
                <span class="right">{!! $prj['project_duration'] !!}</span>
            </div>
            <div class="tablerow">
                <span>{!! $prj['project_description'] !!}</span>
            </div>
            </div>
        </section>
        @endforeach
    </section>

    <section id="education">
        <h2>Education</h2>
        <div class="edtable">
        <span style="font-size: 14px;"><b>{!! $education !!}</b></span><br>
                <span style="font-size: 14px;">{!! $education_institute !!}</span><br>
                <span style="font-size: 14px;"><b>{!! $education_duration !!}</b></span><br>
                <span style="font-size: 14px;"><b>{!! $education_location !!}</b></span><br>
          
           
        </div>
       
    </section>
    
   
</body>
</html>