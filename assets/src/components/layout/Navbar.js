import React from 'react';
import PropTypes from 'prop-types';
const { __, _x, _n, _nx } = wp.i18n;

const Navbar = ( {title} ) => {

	return (
		<nav className='navbar bg-primary'>
			<h1>{title}</h1>
		</nav>
	)

}

Navbar.defaultProps = {
	title: __("Github finder", "react-spa" ),
}

Navbar.propTypes = {
	title: PropTypes.string.isRequired
}

export default Navbar