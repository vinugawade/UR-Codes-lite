// ******************User Defined Function******************
function dynamicdropdown(listindex) {
    switch (listindex) {
        case "FY":
            sem = ["1", "2"];
            break;

        case "SY":
            sem = ["3", "4"];
            break;
        case "TY":
            sem = ["5", "6"];
            break;
    }
    var string = "<option>Select Semester</option>";
    for (i = 0; i < sem.length; i++) {
        string = string + "<option value=" + sem[i] + ">" + sem[i] + "</option>";
    }
    document.getElementById("sem").innerHTML = string;
    return true;
}

function dynamicsubject(listindex) {
    switch (listindex) {
        case "1":
            subjects = ["English(22101)", "Chemistry(22102)", "Physics(22102)", "BMS(22103)"];
            break;
        case "2":
            subjects = ["EEC(22215)", "AMI(22224)", "BEC(22225)", "PIC(22226)"];
            break;
        case "3":
            subjects = ["OOP(22316)", "DSU(22317)", "CGR(22318)", "DMS(22319)", "DTE(22320)"];
            break;
        case "4":
            subjects = ["JPR(22412)", "SEN(22413)", "DCC(22414)", "MIC(22415)"];
            break;
        case "5":
            subjects = ["EST(22447)", "OSY(22516)", "AJP(22517)", "STE(22518)", "CSS(22519)", "ACN(22520)", "ADM(22521)"];
            break;
        case "6":
            subjects = ["MGT(22509)", "PWP(22616)", "MAD(22617)", "ETI(22618)", "WBP(22619)", "NIS(22620)", "DWM(22621)"];
            break;
    }
    var string = "<option>Select Subject</option>";
    for (i = 0; i < subjects.length; i++) {
        string = string + "<option value=" + subjects[i] + ">" + subjects[i] + "</option>";
    }
    document.getElementById("project_sub").innerHTML = string;

    return true;
}

function email(key) {
    var queryString = decodeURIComponent(window.location.search);
    queryString = queryString.substring(1);
    var TOemail = queryString.split("=");

    Email.send({
        Host: "smtp.gmail.com",
        Username: "<Your-Email>",
        Password: "<Your-Password>",
        To: TOemail[1],
        From: 'UR-Code-lite@support.in',
        Subject: "Recovery Code For UR-Code-lite User",
        Body: "Your Recovery Key Is : " + key,
    }).then(
        message => alert("Recovery Key Sent To " + TOemail[1])
    );

}

function comfirmD() {
    if (confirm("Are You Sure To Delete This Project?") === true) {
        document.getElementById("deleteForm").action = "./delete.php";
        document.getElementById("deleteForm").submit();
    } else {
        window.location.assign('./view_projects.php');
    }
}