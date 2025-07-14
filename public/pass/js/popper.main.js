var input = document.getElementById("myText");
input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn").click();
    }
});

function myFunction() {
    var x = document.getElementById("myText").value;

    if (x === "dmoadmin2024") {
        window.location = "/admin/ioeiropesdfk;m,cvxc.zvmxc.v,mfk;ssejkpofksefsk;fsk;dszxm.c,mx,cxmzc.mzfmcvemfpowekfpw39rw349-23432r5iwefmcvx,vm.vm.cx,vmx.v,mxc.,vmk";


    } else {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "(SuperAdmin เท่านั้นที่มีสิทธิเข้าถึง!)",
            timer: 5000,
            timerProgressBar: true
        });
    }

}