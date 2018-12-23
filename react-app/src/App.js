import React, { Component } from 'react';
import ArticleList from './components/ArticleList'
import db from './dbArticles'

class App extends Component {
    state = {
        reverted: false
    };

    render() {
        return (
            <div className="App">
                <h1>
                    App Name
                    <button onClick={this.revert}>Revert</button>
                </h1>
                <ArticleList articles={
                    this.state.reverted
                        ? db.slice().reverse()
                        : db
                }/>
            </div>
        );
    }

    revert = () => this.setState({
        reverted: !this.state.reverted
    })
}

export default App;
