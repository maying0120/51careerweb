function getUiConfig() {
  return {
  'callbacks': {
    // Called when the user has been successfully signed in.
    'signInSuccess': function(user, credential, redirectUrl) {
      handleSignedInUser(user);
      // Do not redirect.
      return false;
    }
  },
  // Opens IDP Providers sign-in flow in a popup.
  'signInFlow': 'popup',
  'signInOptions': [
    // The Provider you need for your app. We need the Phone Auth
    // firebase.auth.EmailAuthProvider.PROVIDER_ID,
    {
      provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
      recaptchaParameters: {
        type: 'image', // another option is 'audio'
        size: 'invisible', // other options are 'normal' or 'compact'
        badge: 'bottomleft' // 'bottomright' or 'inline' applies to invisible.
      }
    }
  ]
  };
}

// Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());

/**
* Displays the UI for a signed in user.
* @param {!firebase.User} user
*/
var handleSignedInUser = function(user) {
  document.getElementById('phone-verified').style.display = 'block';
  document.getElementById('phone-not-verified').style.display = 'none';
  document.getElementById('phone').value = user.phoneNumber;
};

/**
* Displays the UI for a signed out user.
*/
var handleSignedOutUser = function() {
  document.getElementById('phone-verified').style.display = 'none';
  document.getElementById('phone-not-verified').style.display = 'block';
  ui.start('#firebaseui-container', getUiConfig());
};

// Listen to change in auth state so it displays the correct UI for when
// the user is signed in or not.
firebase.auth().onAuthStateChanged(function(user) {
  user ? handleSignedInUser(user) : handleSignedOutUser();
});

/**
* Initializes the app.
*/
var initApp = function() {
    firebase.auth().signOut();
};

window.addEventListener('load', initApp);
