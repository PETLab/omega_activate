/*File contains custom javascript for omega 50can theme*/

/*Function to set challenge software cookie*/
function softwareSwitch(tid){
    jQuery.cookie("am_challenge_software", tid, { expires : 30, path: '/'});
    location.reload();
}
