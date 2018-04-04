import DataStore from 'flux/stores/DataStore.js'
import Hero from './Hero.js'
import Action from './Action.js'
import Info from './infoSection.js'
import Info2 from './infoSection2.js'
import Transition from "./TransitionSection";
import Info3 from "./infoSection3";
import BottomBanner from "./BottomBanner";




class Home extends React.Component {




    render() {
        let allData = DataStore.getAll();
        // console.log(allData);

        return (
            <div>
                <Hero/>,
                <Action/>,
                <Info/>,
                <Info2/>,
                <Transition/>,
                <Info3/>,
                <BottomBanner/>

            </div>



        );
    }
}

export default Home;