const path = require('path');
const fs = require('fs');

// check if file exists: fs.existsSync('/path/to/file')
/*
	Aggiungi un oggetto alla variabile "obj" qui sotto per aggiungere un entry point
	- chiave -> il nome del bundle che vogliamo ottenere
	(e che avrà la forma nomeBundle.bundle.js)
	- valore -> il percorso del file javascript sorgente
*/

const obj = {
	index: path.join(path.resolve(__dirname, 'src/js'), 'index.js'),
	css: path.join(path.resolve(__dirname). 'src/css'), 'colors.css'),
	css: path.join(path.resolve(__dirname). 'src/css'), 'palette.css'),
	css: path.join(path.resolve(__dirname). 'src/css'), 'spacing.css'),
	css: path.join(path.resolve(__dirname). 'src/css'), 'tipography.css'),
	img: path.join(path.resolve(__dirname). 'src/img'),
	
}

module.exports = obj