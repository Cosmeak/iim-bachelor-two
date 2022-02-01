import React from "react";
import { ImageBackground, StyleSheet, Text, View, Image, SafeAreaView, TextInput} from "react-native";
import { Input } from 'react-native-elements';


const Login = () => (
  <View style={styles.container}>
    <ImageBackground source={require('../assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
      <View style={styles.rond}>
        <Image
          style={styles.logo}
          source={require('../assets/logo_cb.png')}
        />
      </View>
      <Input 
        placeholder='Entrer un pseudo'
        placeholderTextColor="#ffffff80"
        style={styles.input}
        underlineColorAndroid='transparent'
      />
    </ImageBackground>
    </View>  
);

const styles = StyleSheet.create({
  container: {
    flex: 1,
},
  image: {
    height : '100%',
},
  text: {
    color: "white",
    fontSize: 42,
    lineHeight: 84,
    fontWeight: "bold",
    textAlign: "center",
    backgroundColor: "#000000c0"
},
  rond: {
    padding : 32,
    borderRadius: 1000,
    backgroundColor: "#000000c0",
    overflow: 'hidden',
    alignSelf: 'center',
    marginTop : '30%'
},
  logo: {
    width: 160,
    height: 160,
    alignSelf: 'center',
    resizeMode : "contain"
    

  },
  input: {
    backgroundColor : "#000000c0",
    width: '85%',
    height: 40,
    textAlign:'left',
    borderWidth: 1,
    borderColor: '#000000c0',
    color : 'white'
  }
});

export default Login;