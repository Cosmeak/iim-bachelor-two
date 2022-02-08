import React from "react";
import { Dimensions, ImageBackground, StyleSheet, Text, TextInput, View, Image, Pressable } from "react-native";


const App = () => (
  <View style={styles.container}>
    <ImageBackground source={require('../assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
      <View style={styles.rond}>
        <Image
          style={styles.logo}
          source={require('../assets/logo_cb.png')}
        />
      </View>
        <TextInput
          style={styles.input}
          placeholder="Entrer un pseudo"
          placeholderTextColor="#ffffff80"
          underlineColorAndroid='transparent'
        /> 
          <Pressable style = {styles.button} onPress={() => alert('Bouffon CALME TOI MERDE')}> <Text style={styles.textButton}> Entrer dans le jeu </Text> </Pressable>
          <Pressable style={styles.admin}> <Text>Administrateur ?</Text> </Pressable>
    </ImageBackground>
  </View>  
);

const styles = StyleSheet.create({
  container: {
    flex: 1,
},
  image: {
    height: Dimensions.get("window").height,
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
    padding : 0,
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
    alignSelf : 'center',
    marginTop : '20%',
    backgroundColor : "#000000c0",
    width: '80%',
    textAlign:'left',
    borderWidth: 1,
    borderColor: '#000000c0',
    color : 'white',
    borderRadius : 5,
    paddingHorizontal : 16,
    paddingVertical: 8,
  },
  button: {
    alignSelf : 'center',
    marginTop : 24,
    backgroundColor : "#000000c0",
    width: 'auto',
    borderWidth: 1,
    borderRadius : 150/2,
  },
  textButton: {
    paddingVertical: 8,
    paddingHorizontal: 32,
    textAlign: 'center',
    color: 'white'
  },
  admin: {
    alignSelf: 'center',
    marginTop: 'auto',
    marginBottom: 32,
    backgroundColor : "#000000c0",
    paddingHorizontal: 16,
    paddingVertical: 8,
    borderRadius: 150/2,
  }
});

export default App;