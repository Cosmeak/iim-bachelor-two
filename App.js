import * as React from 'react';
import { Button, View, Text } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { Dimensions, ImageBackground, StyleSheet, TextInput, Image, Pressable } from "react-native";



function HomeScreen({ navigation }) {
  return (
    <View style={styles.container}>
  <ImageBackground source={require('./assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
    <View style={styles.rond}>
      <Image
        style={styles.logo}
        source={require('./assets/logo_cb.png')}
      />
    </View>
      <TextInput
        style={styles.input}
        placeholder="Entrer un pseudo"
        placeholderTextColor="#ffffff80"
        underlineColorAndroid='transparent'
      /> 
        <Pressable style = {styles.button} onPress={() => navigation.navigate('Game')}><Text style={styles.textButton}>Entrer dans le jeu</Text></Pressable>
        <Pressable style={styles.admin} onPress={() => navigation.navigate('Admin')}><Text style={color.white}>Administrateur ?</Text></Pressable>
  </ImageBackground>
  </View>
);
}



function AdminScreen({ navigation }) {
  return (
    <View style={styles.container}>
    <ImageBackground source={require('./assets/bg_cb.png') } resizeMode="cover" style={styles.image}>
      <View style={styles.rond}>
        <Image
          style={styles.logo}
          source={require('./assets/logo_cb.png')}
        />
      </View>
      <TextInput
        style={[styles.inputt, margin.mt]}
        placeholder="Email"
        placeholderTextColor="#ffffff80"
        underlineColorAndroid='transparent'
      />
      <TextInput
        style={[styles.inputt, margin.mt5]}
        placeholder="Mot de passe "
        placeholderTextColor="#ffffff80"
        underlineColorAndroid='transparent'
      />
      <Button
        title="Go to Details... again"
        onPress={() => navigation.navigate('Home')}
      />
    </ImageBackground>
  </View> 
  );
}


function GameView({navigation}){
  return(
    <View style={styles.container}>
      <ImageBackground source={require('./assets/game_bg.png') } resizeMode="cover" style={styles.image}>
        <View style={[game.part1 , margin.mtbar, game.bg, border.br5]}>
          <Text style={color.white}></Text>
        </View>
        <View style={[game.part2 , margin.mt5, game.bg, border.br5]}>
          <Text style={color.white}></Text>
        </View>
        <View style={[game.part4 , margin.mt5, game.bg, border.brF]}>
          <Button
          title="Ressource"
          onPress={() => navigation.navigate('Ressource')}
        />
        </View>
      </ImageBackground>
    </View>
  )
}

function RessourcePlayer({navigation}){
  return(
    <View style={styles.container}>
    <ImageBackground source={require('./assets/game_bg.png') } resizeMode="cover" style={styles.image}>
      <Text style={[styles.text, margin.mt]}>BIG Ressource</Text>
      <Button
          title="Game"
          onPress={() => navigation.navigate('Game')}
        />
    </ImageBackground>
    </View>
  )
}


const Stack = createNativeStackNavigator();

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="Home">
        <Stack.Screen name="Home" component={HomeScreen} options={{headerShown:false}} />
        <Stack.Screen name="Admin" component={AdminScreen} options={{headerShown:false}} />
        <Stack.Screen name="Game" component={GameView} options={{headerShown:false}} />
        <Stack.Screen name="Ressource" component={RessourcePlayer} options={{headerShown:false}} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

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
  },
  inputt: {
    alignSelf : 'center',
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
});

const color = StyleSheet.create({
  white: {
    color : 'white',
    opacity : 1
},
});

const margin = StyleSheet.create({
  mt: {
    marginTop : "20%"
  },
  mt5: {
    marginTop : "4%"
  },
  mtbar:{
    marginTop : '12%'
  }
})

const border = StyleSheet.create({
  br5:{
    borderRadius : 10
  },
  brF:{
    borderBottomLeftRadius: 50,
    borderBottomRightRadius: 50,
    borderTopLeftRadius: 10,
    borderTopRightRadius: 10,
  }
})

const game = StyleSheet.create({
  bg: {
    backgroundColor : '#00000070',
  },

  part1 : {
    width : '95%',
    height : '6%',
    alignSelf: 'center',
  },
  part2 : {
    width : '95%',
    height : '75%',
    alignSelf: 'center',
  },

  part3 : {
    width : '90%',
    height : '20%',
    alignSelf: 'center',
  },
  part4 : {
    width : '95%',
    height : '8%',
    alignSelf: 'center',
  },
})

export default App;
