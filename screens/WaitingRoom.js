import React from "react";
import { ImageBackground, StyleSheet, View } from "react-native";

class WaitingRoom extends React.Component{
    render(){
      return (
        <View style={styles.container}>
        <ImageBackground source={require('../assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
          <View style={style.player}/>
        </ImageBackground>
      </View> 
      )
    }
}

const styles = StyleSheet.create({
    container: {
      flex: 1,
  },
})

export default WaitingRoom;
