//
// Validate an email address.
// Source: https://stackoverflow.com/questions/46155/97CB236.ABA236/how-to-validate-an-email-address-in-javascript
//
function pimwickValidateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
