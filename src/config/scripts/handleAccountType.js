
const accountTypeToggle = document.getElementById('account-type-toggle');

// Toggle on change
accountTypeToggle.addEventListener('change', () => {
    const isPremium = accountTypeToggle.checked;
    let account_type = isPremium ? 'premium' : 'free';

    // Send the request to accountTypeToggler.php to save the account_type in SESSION
    fetch(`/config/backend/api/accountTypeToggler.php?account_type=${account_type}`);
});