var edubtn = document.getElementById('addEducation');
var edurow = document.getElementById('education').innerHTML;
var langbtn = document.getElementById('addLanguage');
var langrow = document.getElementById('languages').innerHTML;
var techbtn = document.getElementById('addTechnology');
var techrow = document.getElementById('technology').innerHTML;
var projbtn = document.getElementById('addProject');
var projrow = document.getElementById('projects').innerHTML;
var certbtn = document.getElementById('addCertificate');
var certrow = document.getElementById('certificates').innerHTML;
var workbtn = document.getElementById('addWork');
var workrow = document.getElementById('workexp').innerHTML;


edubtn.addEventListener('click', function(){
    var newrow =  document.createElement("div");
    newrow.innerHTML = edurow;
    document.getElementById('education').appendChild(newrow);
});

langbtn.addEventListener('click', function(){
    var newrow =  document.createElement("div");
    newrow.innerHTML = langrow;
    document.getElementById('languages').appendChild(newrow);
});

techbtn.addEventListener('click', function(){
    var newrow =  document.createElement("div");
    newrow.innerHTML = techrow;
    document.getElementById('technology').appendChild(newrow);
});

projbtn.addEventListener('click', function(){
    var newrow =  document.createElement("div");
    newrow.innerHTML = projrow;
    document.getElementById('projects').appendChild(newrow);
});

certbtn.addEventListener('click', function(){
    var newrow =  document.createElement("div");
    newrow.innerHTML = certrow;
    document.getElementById('certificates').appendChild(newrow);
});

workbtn.addEventListener('click', function(){
    var newrow =  document.createElement("div");
    newrow.innerHTML = workrow;
    document.getElementById('workexp').appendChild(newrow);
});