
let lists = $(".lists");
lists.html(``);
$("#sumall").hide();
function listCourses(){
    let numco = $("#no-co").val();

    for (let i = 1; i <= numco; i++) {
        var list = $('<div>').addClass("course p-3 mt-2 justify-content-center").html(`
            <h4 id="course_no" class="">Course ${i} </h4>
            <select class="form-select my-2" name="grade[]" id="">
                <option selected>Grade &nbsp;</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Credits</span>
                <input type="number" name="credit[]" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <hr>`);
    
        // Assuming lists is the parent element you want to append to
        $('.lists').append(list);
        $(".done").hide();
        $("#sumall").show();
        $("par").hide();
    }   
    event.preventDefault();
}

function cgpa() {
    let grades = $('[name="grade[]"]');
    let credits = $('[name="credit[]"]');
    let totalcr = 0;
    let totalgr = 0;

    for (let i = 0; i < grades.length; i++) {
        let grade = grades.eq(i).val();
        let credit = parseFloat(credits.eq(i).val());

        if (!isNaN(credit) && credit > 0) {
            let gradepoint = calgp(grade);
            totalgr += gradepoint * credit;
            totalcr += credit;
        } else {
            alert("Invalid credit");
        }
    }

    if (totalcr > 0) {
        let cgpaans = (totalgr / totalcr).toFixed(2);
        let classname = knowClass(cgpaans);
        $(".tit").html("Your CGPA is:");
        $(".par").hide();
        $(".classcard").html(
            ` <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="result-card">
                    <!-- Sample data, replace this with your actual CGPA and class name -->
                    <div class="cgpa-value"> ${cgpaans} </div>
                    <div class="class-name mb-3"> ${classname} </div>
                    <button class="return-home-btn btn" onclick="returnHome()">Return Home</button>
                </div>
            </div>
        </div>`
        );
        $("#sumall").hide();
        $(".lists").hide();
    } else {
        alert("Total credits are zero or invalid. Cannot calculate CGPA.");
    }
}

function returnHome(){
    window.location.href = "cgpa.php" 
}

function knowClass(cgpaans) {
    let studentClass;

    if (cgpaans >= 4.5) {
        studentClass = "First Class";
    } else if (cgpaans >= 3.5) {
        studentClass = "Second Class Upper";
    } else if (cgpaans >= 2.5) {
        studentClass = "Second Class Lower";
    } else if (cgpaans >= 1.5) {
        studentClass = "Third Class";
    } else {
        studentClass = "Fail";
    }

    return studentClass;
}


function calgp(grade) {
    let gradepts = {
        "A" : 5.0,
        "B" : 4.0,
        "C" : 3.0,
        "D" : 2.0,
        "E" : 1.0,
        "F" : 0.0

    }

    return gradepts[grade] || 0.0;
}