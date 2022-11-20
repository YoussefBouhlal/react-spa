import React from 'react';
import PropTypes from 'prop-types';
const { __, _x, _n, _nx } = wp.i18n;

const UserItem = ( {user: {avatar_url, login, html_url}} ) => {
    
    return (
        <div className='card text-center'>
            <img src={avatar_url} alt=""className='round-img' style={{width:'60px'}} />
            <h3>{login}</h3>
            <div>
                <a href={html_url} className="btn btn-dark btn-sm sm-1">{__('More', 'react-spa')}</a>
            </div>
        </div>
    )

}

UserItem.propTypes = {
    user: PropTypes.object.isRequired
}

export default UserItem;