import React, { Component } from 'react';
import './App.css';
import axios from 'axios';

class App extends Component {

  state = {
    apiResponse: [],
    data: []
  }
  
  
  componentDidMount = () => {
    axios.get('http://localhost:8080/train-react-php/back-office/api.php')
    .then(response => {
      this.setState( { apiResponse: response.data } )
    })
    .catch(error => {
      console.log(error);
    });
  }

  render(){
    return (
      <div className="box">
        
      </div>
    );
  }
}
export default App;

