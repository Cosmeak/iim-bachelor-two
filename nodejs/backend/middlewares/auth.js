const webtoken = require('jsonwebtoken')

module.exports = (request, response, next) => {
  try {
    const token = request.headers.authorization.split(' ')[1] // Parse to token to get it in the authorization part in request header
    const decodeToken = webtoken.verify(token, 'secretToken') // Decode token to check if it valid 
    const userId = decodeToken.userId // get the user id
    // check if the body have the user id AND if the user id is the same that the user id of token
    if(request.body.userId && request.body.userId !== userId) {
      return response.status(400).json({ status: 'Failure', reason: 'Bad id' })
    }
    // if all is ok we can do next things  (check on router to see what we do next and where the middleware is used)
    else {
      next()
    }
  }

  catch {
    return response.status(401).json({ status: 'Failure', reason: 'Bad request' })
  }
}