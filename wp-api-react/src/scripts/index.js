
import {render}             from 'react-dom';
import DataActions          from 'flux/actions/DataActions.js';
import 'materialize-css/dist/css/materialize.css'
import 'materialize-css/dist/js/materialize.js'
import Home                 from 'components/Home.js';
import Header               from 'components/Header.js';
import Hero                 from 'components/Hero.js';
import Action               from 'components/Action.js';
import Info                 from "./components/infoSection.js";
import Info2                from "./components/infoSection2.js";
import Transition           from "./components/TransitionSection.js";
import Info3            from "./components/infoSection3";
import BottomBanner         from "./components/BottomBanner";
import '../styles/appStyles.scss';



import {
    BrowserRouter as Router,
    Route,
    Redirect,
    Switch
} from 'react-router-dom';







class AppInitializer {

    templates = {
        'herosection': Hero,
        'calltoactionsection': Action,
        'infosection': Info,
        'infosection2': Info2,
        'transitionsection': Transition,
        'infosection3': Info3,
        'bottombannersection': BottomBanner

    }

    buildRoutes(data){
        return data.pages.map((page, i) => {
            return(
                <Route
                    key={i}
                    component={this.templates[page.slug]}
                    path={`/${page.slug}`}
                    exact
                />
            )
        })
    }

    run() {
        DataActions.getPages((response)=>{
            render(
                <Router>
                    <div>
                        <Header />

                        <Switch>
                            <Route path="/" component={ Home } exact />

                            {this.buildRoutes(response)}
                            <Route render={() => { return <Redirect to="/" /> }} />
                        </Switch>
                    </div>
                </Router>

                , document.getElementById('app')
            );
        });
    }
}

new AppInitializer().run();