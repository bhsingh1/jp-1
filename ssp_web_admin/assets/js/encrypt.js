function makerand(){var text = "";var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";for( var i=0; i < 50; i++ )text += possible.charAt(Math.floor(Math.random() * possible.length));return text;}


function enc_pas(word){
	var dat = new Date();
		var ts = dat.getTime()+makerand();
		
        var salt = CryptoJS.lib.WordArray.random(128/8); 
        var key256Bits500Iterations = CryptoJS.PBKDF2("oldp", salt, { keySize: 256/32, iterations: 500 });
        var iv  = CryptoJS.enc.Hex.parse('101112131415161718191a1b1c1d1e1f'); // just chosen for an example, usually random as well

        var encrypted = CryptoJS.AES.encrypt(word, key256Bits500Iterations, { iv: iv });  
        var data_base64 = encrypted.ciphertext.toString(CryptoJS.enc.Base64); 
        var iv_base64   = encrypted.iv.toString(CryptoJS.enc.Base64);       
        var key_base64  = encrypted.key.toString(CryptoJS.enc.Base64);
		
		var jcript = ts+'&'+data_base64+'&'+iv_base64+'&'+key_base64+'&'+ makerand();
		return jcript;
}
