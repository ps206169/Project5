import { StyleSheet, Text, View } from 'react-native'
import React from 'react'

const AboutPage = () => {
  return (
    <View>
      <Text style={styles.container}>
        Versie/Version: 0.2.2
        </Text>
        <Text style={styles.container}>
        English follows below.
        </Text>
        <Text style={styles.container}>
        summa sports is een app die bedoelt is om studenten te helpen om meer te bewegen. 
        In deze app vind kun je verschillende oefeningen zien en je prestaties bijhouden om je voortgang bij te houden.
        </Text>
        <Text style={styles.container}> 
        Summa sports is an app that aims to help students exercise more.
        In this app you can see the different exercises and track your performance to keep an eye on your progress.
        </Text>
        <Text style={styles.container}>
        To contact us you can call our phone number or send an email to our email address. {'\n'}
        Phone : 0612345678 {"\n"}
        Mail  : SportsApp@summacollege.nl
      </Text>
    </View>
  )
}

export default AboutPage

const styles = StyleSheet.create({
  container: {
    padding: 20,
  },
})