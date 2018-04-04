import DataStore from 'flux/stores/DataStore.js'


class Transition extends React.Component {


    render(){
        let pageData = DataStore.getPageBySlug('transitionsection');
        return(
            <div className='transition-section container'>
                <div className='container'>
                    <h1 className='transition-header center'>{pageData.acf.header}</h1>
                    <img className='transition-image' src={pageData.acf.image} />
                    <p className='transition-description center'>{pageData.acf.description}</p>
                </div>
            </div>
        )
    }

}

export default Transition;