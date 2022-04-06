document.getElementById('loan-form').addEventListener('submit', calculateResult);

function calculateResult(e){
    e.preventDefault();
const amount = document.getElementById('loan-amount').value.trim();
const interest = document.getElementById('interest-amount').value.trim();
const years = document.getElementById('Repayment-years').value.trim();
const monthlyPayment = document.getElementById('Monthly-payment');
const totalPayment = document.getElementById('Total-payment');
const totalinterest = document.getElementById('Total-interest');

const principal = parseFloat(amount);
const calculatedPayments  = parseFloat(years);
const calculatedInterest = parseFloat(principal*interest*calculatedPayments)/100;

const monthly = parseFloat(principal)/12;


if(amount != "" && interest !="" && years !=""){
monthlyPayment.value = monthly.toFixed(3);
totalPayment.value = (principal+calculatedInterest).toFixed(2);
totalinterest.value = calculatedInterest.toFixed(2);
}
else{
    showError('Please check Your Numbers');
    function showError(error_msg){
        const errorDiv = document.createElement('div');
        const card = document.querySelector('.card');
        const heading = document.querySelector('.heading');
        
        errorDiv.className = 'alert alert-danger';
        
        errorDiv.appendChild(document.createTextNode(error_msg));
        card.insertBefore(errorDiv, heading);
        
        setTimeout(clearError, 2000);
    }
    function clearError(){
        document.querySelector('.alert').remove();
}

 }



 }
