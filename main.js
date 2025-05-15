document.addEventListener("DOMContentLoaded", function () {
  let services = document.querySelectorAll(".service");
  let details = document.querySelectorAll(".details");



  services.forEach(service => {
      service.addEventListener("click", function () {
          let serviceId = this.getAttribute("data-service");
          let selectedDetail = document.getElementById(serviceId);



          // Hide all details first
          details.forEach(detail => {
              if (detail !== selectedDetail) {
                  detail.classList.remove("show"); // Hide others smoothly
              }
          });

          // Toggle visibility of the selected detail
          selectedDetail.classList.toggle("show");
      });
  });
});



// Loan Calculator Function
function calculateLoan() {
  let loanAmount = parseFloat(document.getElementById("loanAmount").value);
  let interestRate = parseFloat(document.getElementById("interestRate").value);
  let loanTerm = parseInt(document.getElementById("loanTerm").value);
  if (isNaN(loanAmount) || isNaN(interestRate) || isNaN(loanTerm) || loanTerm <= 0) {
      document.getElementById("loanResult").innerText = "Please enter valid numbers.";
      return;
  }
  let monthlyInterest = (interestRate / 100) / 12;
  let monthlyPayment = (loanAmount * monthlyInterest) / (1 - Math.pow(1 + monthlyInterest, -loanTerm));
  let totalPayment = monthlyPayment * loanTerm;
  document.getElementById("loanResult").innerHTML = `
      <strong>Monthly Payment:</strong> UGX ${monthlyPayment.toFixed(2)} <br>
      <strong>Total Payment:</strong> UGX ${totalPayment.toFixed(2)}
  `;
}



// Balance Check Function (Simple Demo)

function checkBalance() {
  let accountNumber = document.getElementById("accountNumber").value.trim();
  if (accountNumber === "") {
      document.getElementById("balanceResult").innerText = "Please enter an account number.";
      return;
  }

  // Simulated balance
  let balance = Math.floor(Math.random() * 1000000) + 10000; // Random balance
  document.getElementById("balanceResult").innerHTML = `<strong>Account Balance:</strong> UGX ${balance.toLocaleString()}`;
}