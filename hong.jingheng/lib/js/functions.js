
// fetch is a concept in JavaScript programming called a promise. 
// A promise is something that promises to start and it promises to finish.
// When it finishes, we are allowed to tell it what to do then. 
// Or in other words, what do you want to do?
// So fetch is a promise that's going to run and do something. And when it is done, then do this. 

const query = (options) => {
	return fetch('data/api.php', {
		method:'POST',
		body: JSON.stringify(options), 
		   //JSON.stringify is almost exactly like PHP is JSON encode.
		   // It's going to encode an object into a string of JSON. 	
		headers:{'Content-Type':'application/json'}
	}).then(d=>d.json());
}

// this is a concept called currying. 
// To curry a function is to let a function make a function. 
// This is only useful if use library of codes. 
// This isn't useful if only doing single one-off applications that are never going to reuse anything. 
// The function we are going to make here is going to accept a function that then turns into a function that accepts an array.
// It means that when we use templater, the result is a function, not like a string or number or anything like that. 
// The result is another function.

const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');

