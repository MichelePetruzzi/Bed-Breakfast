const path = require('path');

const obj = {
	alias: {
		"@node_modules": path.resolve(__dirname, 'node_modules'),
		"@js": path.resolve(__dirname, 'src/js'),
		"@css": path.resolve(__dirname, 'src/css'),
		"@img": path.resolve(__dirname), 'src/img'),
	}
}

module.exports = obj