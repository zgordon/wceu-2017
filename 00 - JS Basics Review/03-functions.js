// Function declaration
function getPosts() {
    let posts = apiMagic(); // Will learn
    return posts;
}

// Function call
getPosts();

// Function declaration with parameter
function getUser( id = 0 ) {
    let user = apiMagic( id );
    return user;
}
// Function call with parameter
getUser( 1 );