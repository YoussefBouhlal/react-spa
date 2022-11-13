import ReactDOM from 'react-dom';
// import { __ } from 'i18n';
import './admin.scss';
const { __, _x, _n, _nx } = wp.i18n;

ReactDOM.render( <App />, document.querySelector('#rspa_container') );

function App() {

    return (
        <div>
            <p>{__("Hello world", "react-spa")}</p>
        </div>
    );
}