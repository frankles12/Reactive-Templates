import DataStore from 'flux/stores/DataStore.js'
import $ from 'jquery';

class Action extends React.Component {








    render(){
    let pageData = DataStore.getPageBySlug('calltoactionsection');
        return(
            <div className='call-to-action-section container'>
                <img className='img-overlay-hero' src={pageData.acf.image} />
                <h3 className='action-subheader'>{pageData.acf.sub_header}</h3>
                <hr />
                <div className='row portrait-containers'>
                    <img className='left-portrait responsive-img col l4' src={pageData.acf.left_portrait} />
                    <img className='middle-portrait responsive-img col l4' src={pageData.acf.middle_portrait} />
                    <img className='right-portrait responsive-img col l4' src={pageData.acf.right_portrait} />
                </div>
                <a className="action-button waves-effect waves-light btn-large">Check it Out!</a>
            </div>
        )
}


}

export default Action;